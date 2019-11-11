$(document).ready(function(){
  // Reset Font Size
  var originalFontSize = $('p.strofa').css('font-size');
    $(".resetFont").click(function(){
    $('p.strofa').css('font-size', originalFontSize);
  });
  // Increase Font Size
  $(".increaseFont").click(function(){
    var currentFontSize = $('p.strofa').css('font-size');
    var currentFontSizeNum = parseFloat(currentFontSize, 10);
    var newFontSize = currentFontSizeNum+0.5;
    $('p.strofa').css('font-size', newFontSize);
    return false;
  });
  // Decrease Font Size
  $(".decreaseFont").click(function(){
    var currentFontSize = $('p.strofa').css('font-size');
    var currentFontSizeNum = parseFloat(currentFontSize, 10);
    var newFontSize = currentFontSizeNum-0.5;
    $('p.strofa').css('font-size', newFontSize);
    return false;
  });
});
