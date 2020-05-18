$(function(){
  $("#form-total").steps({
      headerTag: "h2",
      bodyTag: "section",
      transitionEffect: "fade",
      enableAllSteps: true,
      autoFocus: true,
      transitionEffectSpeed: 500,
      titleTemplate : '<div class="title">#title#</div>',
      labels: {
          previous : 'Back Step',
          next : 'Next Step',
          finish : 'Submit',
          current : ''
      },
      onFinished: function (event, currentIndex)
      {
        var form = $('#form1');
        form.submit();
        alert("Silahkan download hasil form berupa pdf");
      },
  });
  $("#date").datepicker({
      dateFormat: "MM - DD - yy",
      showOn: "both",
      buttonText : '<i class="zmdi zmdi-chevron-down"></i>',
  });
});

// $(document).ready(function(){
//   $("#next").click(function(){
//     $("#myModal").show();
//   });
// });