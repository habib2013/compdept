<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use Auth;       
use Intervention\Image\Facades\Image;
use App\Course;
use Illuminate\Database\Eloquent\Collection;
use Webpatser\Uuid\Uuid;

use Validator;
use App\AjaxImage;

use DB;



class ProfilesController extends Controller
{
                public function __construct(){
                        return $this->middleware('auth');
                }

        public function user($username){
                     
                            
                $user = User::where('username','=',$username)->firstorFail();
               
              //  $follows =(auth()->user())? auth()->user()->following->contains($user->id):false;
               // dd($follows);

              //  return view('profiles.index')->withUser($user,$follows);
                return view('profiles.index',compact('user'));

               // $user = User::where('username','=','$username')->first();
        // $user = User::findOrFail($user);
        // return view('profiles.index',['user'=>$user]);


        }

        public function settings($username){

       // $this->authorize('update',$user->profile);

        $user = User::where('username','=',$username)->firstorFail();
        return view('profiles.edit')->withUser($user);

      //  return view('profiles.edit',['user'=>$user]);

        }

        public function update(User $user){
                $data = request()->validate([
                        'birthday'=>'',
                        'gender'=>'',
                        'phone'=>'',
                        'address'=>'',
                        'city'=>'',
                        'skills'=>'',
                        'bio'=>'',
                        'country'=>'',
                        'profileimage'=>'',
                        'coverimage'=>'',
          
                ]);    

                if(request('coverimage')){
                        $imagepath = request('coverimage')->store('profiles','public');
                         $image = Image::make(public_path("storage/{$imagepath}"))->resize(200,250);
                        $image->save();

                        $imageArray = ['coverimage'=>$imagepath];
                }

             auth()->user()->profile->update(array_merge(
                $data,$imageArray ?? []
            ));
            return redirect('/'.$user->username);
        }

        public function follwUserRequest(Request $request){
                $user = User::find($request->user_id);
                $response = auth()->user()->toggleFollow($user);      
                return response()->json(['success'=>$response]);
            }
public function course(){
       //  $user = User::where('username','=',$username)->firstorFail();
           $allcourse = new Course();
           $course = $allcourse->all();    
        return view('courses.dashboard_course',['course'=>$course]);
}
public function createcourse(Request $request){
        $validator = Validator::make($request->all(), [
                'description'=>'required',
                'duration'=>'required',
                'lectures'=>'required',
                'quiz'=>'required',
                'percentage'=>'required',          
                'coursecode'=>'required',
                'coursename'=>'required',
                'user_id'=>'required',
                'status'=>'required',
                'unit'=>'required',
                'cv' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
              ]);
        
        
          if ($validator->passes()) {

                $input = $request->all();
                $input['cv'] = time().'.'.$request->cv->extension();
        $request->cv->move(public_path('images'), $input['cv']);

                Course::create($input);
 
                
                 return response()->json(['success'=>'done']);
     }
        
        
             return response()->json(['error'=>$validator->errors()->all()]);    
}    

public function download($file){
        $filepath = public_path('images/'.$file);
         return response()->download($filepath);
                         }

public function editcourse(Request $request){

        $validator = Validator::make($request->all(), [
                'udescription'=>'required',
                'uduration'=>'required',
                'ulectures'=>'required',
                'uquiz'=>'required',
                'upercentage'=>'required',          
                'ucoursecode'=>'required',
                'ucoursename'=>'required',
                'uuser_id'=>'required',
                'ustatus'=>'required',
                'uunit'=>'required',
                'cour_id'=>'',
                'ucv' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
              ]);
        

              $input = $request->all();
             // dd($input);
             $description = $input['udescription'];
             $duration = $input['uduration'];
             $lectures = $input['ulectures'];
             $quiz = $input['uquiz'];
             $percentage = $input['upercentage'];
             $coursecode = $input['ucoursecode'];
             $coursename = $input['ucoursename'];
             $status = $input['ustatus'];
   
          $id = $input['course_id'];


         // $cv = $input['ucv'] ?? '';
                                if($input['ucv'] != ''){    
                                        $cv = $input['ucv'];                                
                                        $cv= time().'.'.$request->ucv->extension();
          $request->ucv->move(public_path('images'), $cv);
          $result = DB::update(DB::raw("update courses set description=:description,lectures=:lectures,quiz=:quiz,percentage=:percentage,coursecode=:coursecode,coursename=:coursename,status=:status,cv=:cv where id=:id"),array('description'=>$description,'lectures'=>$lectures,'id'=>$id,'quiz'=>$quiz,'percentage'=>$percentage,'coursecode'=>$coursecode,'coursename'=>$coursename,'status'=>$status,'cv'=>$cv));

          if($result){
                return response()->json(['success'=>'done']);

              }
              else{
                return response()->json(['error'=>$validator->errors()->all()]);   
              }

                                }

         
          
             


              
          $result2 = DB::update(DB::raw("update courses set description=:description,lectures=:lectures,quiz=:quiz,percentage=:percentage,coursecode=:coursecode,coursename=:coursename,status=:status where id=:id"),array('description'=>$description,'lectures'=>$lectures,'id'=>$id,'quiz'=>$quiz,'percentage'=>$percentage,'coursecode'=>$coursecode,'coursename'=>$coursename,'status'=>$status));
         
                        
          if($result2){
            return response()->json(['success'=>'done']);

          }
          else{
            return response()->json(['error'=>$validator->errors()->all()]);   
          }
         
        
             


}

public function deletecourse(Request $request){

        $course_id = $request->delete_id;
        //dd($course_id);

        $result3 = DB::delete(DB::raw("delete from courses where id=:course_id"),array('course_id'=>$course_id));
              // dd($result3);

        if($result3){
          return response()->json(['success'=>'done']);

        }
        else{
          return response()->json(['error'=>$validator->errors()->all()]);   
        }
       
      
}
}
