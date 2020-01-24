jQuery(document).ready(function($){

   // Clicking the save button on the open modal for both CREATE and UPDATE
   $("#btn-save").click(function (e) {
       $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
           }
       });
       e.preventDefault();
       var formData = {
           description: jQuery('#description').val(),
            duration: jQuery('#duration').val(),
            lectures :jQuery('#lectures').val(),
            quiz: jQuery('#quiz').val(),
            percentage:jQuery('#percentage').val(),
            coursecode:jQuery('#coursecode').val(),
            coursename:jQuery('#coursename').val(),
            user_id:jQuery('#user_id').val(),
            status:jQuery('#status').val(),
            unit:jQuery('#unit').val(),
            cv:jQuery('#cv').val()
      
       };
       var state = jQuery('#btn-save').val();
       var type = "POST";
       var course_id = jQuery('#course_id').val();
       var ajaxurl = 'courses';
       if (state == "update") {
           type = "PUT";
           ajaxurl = 'courses/' + course_id;
       }
       $.ajax({
           type: type,
           url: ajaxurl,
           data: formData,
          
           success: function (data) {
              alert("successfully added");
         
           },
           error: function (data) {
               console.log('Error:', data);
           }
       });
   });

   ////----- DELETE a link and remove from the page -----////

});