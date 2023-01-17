{{-- 
  {!! Toastr::message() !!}

</body>
<script >
  $(document).ready(function(){
    $('#search').keyup(function(){
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      
      var data = this.value;
      if(data != ""){
          $.ajax({
          type: "POST",
          url: "{{route('search-user')}}",
          data: {'search': data},

          success: function(data){

            var output = '';
            
            if(data.length > 0){
              for(var i in data){
                output+=`<a href="http://localhost/greenhub/public/user/dashboard/${data[i].id}">${data[i].user_name}</a><br>`;
                
              }
              $('#result').html(output);
            }
            
          },
          error: function(data){
          }
        })
      }else if(data == ""){
        $('#result').html("");
      }


      

    })
  })
</script>
</html> --}}