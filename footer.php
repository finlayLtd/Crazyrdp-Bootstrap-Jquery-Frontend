

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/scripts.js"></script>

<script>
  $( document ).ready(function() {
      $("#more-products-btn").click(function(){
          $("#more-products").slideToggle();
      })


      $('.icon-clipboard').click(function() {
        var element = $(this).closest("tr").find(".clipboard-input");
        var text = element.attr("data-copy");
        var tempInput = $('<input>');
        $('body').append(tempInput);
        tempInput.val(text).select();
        document.execCommand('copy');
        tempInput.remove();
        element.css("text-decoration","underline");
        setTimeout(function(){
        $(element).css("text-decoration","none");
        }, 1000)

      });

    $(".icon-password").click(function(){

        let input = $(this).closest("tr").find("input");

        if(input.attr("type")=="password") {

            input.attr("type","text");

            $("img.eye-closed").hide();
            $("img.eye-open").show();

        } else {

            $("img.eye-closed").show();
            $("img.eye-open").hide();
            input.attr("type","password");
        }

    })

    $(".options-toggle").click(function(){
      $(this).siblings(".options-toggle-dropdown").toggle();
    })

    $(document).on('click',function(e){
      if(!(($(e.target).closest(".options-toggle").length > 0 ) || ($(e.target).closest(".options-toggle-dropdown").length > 0))){
      $(".options-toggle-dropdown").hide();
     }
    });

    $(".toggle-more-detail").click(function(){
      $(this).siblings(".more-details-content").slideToggle();
    })

    $(".display-distributions").click(function(){
      let dist = $(this).attr("data-dist");
      $(".dist-tab[data-dist="+dist+"]").show();
      $(".dist-tab:not([data-dist="+dist+"])").hide();
    })


    $(".settings-password-img").click(function(){

        let input = $(this).siblings("input");

        if(input.attr("type")=="password") {

            input.attr("type","text");

            $("img.eye-closed").hide();
            $("img.eye-open").show();

        } else {

            $("img.eye-closed").show();
            $("img.eye-open").hide();
            input.attr("type","password");
        }

    })



  });  

</script>



  </body>
</html>
