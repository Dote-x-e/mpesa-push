$(document).ready(function() {
	// console.log('Happy new year');
	    $('.adduom').click(function(e){
          e.preventDefault();

          $.get('adduom',function(data){
          $('#adduom').modal('show')
          .find('#adduomContent')
          // .load($(this).attr('value'));
          .html(data);

        });

      });
      //addbrand
      $('.addbrand').click(function(e){
          e.preventDefault();

          $.get('addbrand',function(data){
          $('#addbrand').modal('show')
          .find('#addbrandContent')
          // .load($(this).attr('value'));
          .html(data);

        });

      }); 

            //addcolor
      $('.addcolor').click(function(e){
          e.preventDefault();

          $.get('addcolor',function(data){
          $('#addcolor').modal('show')
          .find('#addcolorContent')
          // .load($(this).attr('value'));
          .html(data);

        });

      }); 

            //addcart
      $('.addtocart').click(function(e){
          e.preventDefault();

          var shoe_id = $(this).attr('val');
          $.get('addtocart?shoe_id='+shoe_id,function(data){
          $('#addtocart').modal('show')
          .find('#addtocartContent')
          // .load($(this).attr('value'));
          .html(data);

        });

      }); 
});

$('.addtocart').click(function(e){
  e.preventDefault();
  var productid = $(this).attr('productid');
  var userid = $(this).attr('userid');
  var baseUrl = $(this).attr('baseUrl');
  var quantity = $("#quantity_"+productid).val();
  
  $.ajax({
        url: baseUrl+"/product/addtocart?productid="+productid+"&userid="+userid+"&quantity="+quantity,
        type: 'GET',
        dataType: 'json', // added data type
        success: function(res) {
            console.log(res);
            alert(res);
        }
    });
  
  alert(productid+' and '+userid+' and '+quantity);
 });