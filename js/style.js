//Function for "Add a Comment" textarea field

$(document).ready(function () {
   
      $(".se-pre-con").show().delay(1000).fadeOut();
    
    var comment = $('form#enquiry textarea'),
        counter = '',
        counterValue = 140, //change this to set the max character count
        minCommentLength = 10, //set minimum comment length
        $commentValue = comment.val(),
        $commentLength = $commentValue.length,
        submitButton = $('form#enquiry input[type=submit]').hide();

    $('form').prepend('<span class="counter"></span>').append('<p class="info">Min lengde: <span></span></p>');
    counter = $('span.counter');
    counter.html(counterValue); //display your set max length
    comment.attr('maxlength', counterValue); //apply max length to textarea
    $('form').find('p.info > span').html(minCommentLength);
    // everytime a key is pressed inside the textarea, update counter
    comment.keyup(function () {
      var $this = $(this);
      $commentLength = $this.val().length; //get number of characters
      counter.html(counterValue - $commentLength); //update counter
      if ($commentLength > minCommentLength - 1) {
        submitButton.fadeIn(200);
      } else {
        submitButton.fadeOut(200);
      }
    });
    $('#enquiry').on('submit',function(){
      
      /*get value of input box */      
      var name=$('#navn').val();
      var comment=$('#message').val();
      var rating=$('#input-21e').val();
      /* get current date */
      var d = new Date();
      var date = d.getFullYear() + "-" + (d.getMonth()+1) + "-" + d.getDate();
      /*serialize used for  collect form input value */
      var formdata=$('#enquiry').serialize(); 
      /*here ajax method is calling to store comment */
        $.ajax({
          type:'post',
          url:'controller/comment.php',
          data:formdata,
          cache:false,
          success:function(data){
            /* append comment data */
              if(!rating){
                  var html='<br/><div class="comment-by"><b>'+name+'</b></div><div class="comment-date"><span>'+date+'</span></div><hr/><div class="rating"><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div><div class="comment-text"><span>'+comment+'</span></div></div>';
              }
              if(rating==0){
                  var html='<br/><div class="comment-by"><b>'+name+'</b></div><div class="comment-date"><span>'+date+'</span></div><hr/><div class="rating"><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div><div class="comment-text"><span>'+comment+'</span></div></div>';
              }
              if(rating==0.5){
                  var html='<br/><div class="comment-by"><b>'+name+'</b></div><div class="comment-date"><span>'+date+'</span></div><hr/><div class="rating"><i class=" fa fa-star-half-o "></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div><div class="comment-text"><span>'+comment+'</span></div></div>';
              }
              if(rating==1){
                  var html='<br/><div class="comment-by"><b>'+name+'</b></div><div class="comment-date"><span>'+date+'</span></div><hr/><div class="rating"><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div><div class="comment-text"><span>'+comment+'</span></div></div>';
              }
              if(rating==1.5){
                  var html='<br/><div class="comment-by"><b>'+name+'</b></div><div class="comment-date"><span>'+date+'</span></div><hr/><div class="rating"><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div><div class="comment-text"><span>'+comment+'</span></div></div>';
              }
              if(rating==2){
                  var html='<br/><div class="comment-by"><b>'+name+'</b></div><div class="comment-date"><span>'+date+'</span></div><hr/><div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div><div class="comment-text"><span>'+comment+'</span></div></div>';
              }
              if(rating==2.5){
                  var html='<br/><div class="comment-by"><b>'+name+'</b></div><div class="comment-date"><span>'+date+'</span></div><hr/><div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div><div class="comment-text"><span>'+comment+'</span></div></div>';
              }
              if(rating==3){
                  var html='<br/><div class="comment-by"><b>'+name+'</b></div><div class="comment-date"><span>'+date+'</span></div><hr/><div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></div><div class="comment-text"><span>'+comment+'</span></div></div>';
              }
              if(rating==3.5){
                  var html='<br/><div class="comment-by"><b>'+name+'</b></div><div class="comment-date"><span>'+date+'</span></div><hr/><div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></div><div class="comment-text"><span>'+comment+'</span></div></div>';
              }
              if(rating==4){
                  var html='<br/><div class="comment-by"><b>'+name+'</b></div><div class="comment-date"><span>'+date+'</span></div><hr/><div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><div class="comment-text"><span>'+comment+'</span></div></div>';
              }
              if(rating==4.5){
                  var html='<br/><div class="comment-by"><b>'+name+'</b></div><div class="comment-date"><span>'+date+'</span></div><hr/><div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div><div class="comment-text"><span>'+comment+'</span></div></div>';
              }
              if(rating==5){
                  var html='<br/><div class="comment-by"><b>'+name+'</b></div><div class="comment-date"><span>'+date+'</span></div><hr/><div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><div class="comment-text"><span>'+comment+'</span></div></div>';
              }

            $( html ).insertAfter($('[class^="comment-text"]').last());
            /*set empty value to input box */
            $('#navn').val('');
            $('#message').val('');
            $('#input-21e').val('0');
            $('#none').text("");              
          }
        });
        return false;
    });
  });