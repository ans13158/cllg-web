

//     function scribble() {
//       if (forward) {
//         //Forward: Start typing
//         var scribbleArray = scribbleText[count++ % scribbleText.length].trim().split('')
//         for (var i = 0; i <scribbleArray.length; i++) {
//           (function(i, char) {
//             setTimeout(function() {
//               model.scribbleBoardText += char
//               render()
//               if (i == scribbleArray.length - 1) {
//                 forward = !forward
//                 setTimeout(scribble, 2000)
//               }
//             }, i * typingSpeed)
//           })(i + 1, scribbleArray[i])
//         }
//       } else {
//         //Start Erasing
//         var scribbleLength = _scribbleBoard.innerHTML.length
//         for (var i = 0; i <scribbleLength; i++) {
//           (function(i) {
//             setTimeout(function() {
//               model.scribbleBoardText = _scribbleBoard.innerHTML.slice(0, -1)
//               render()
//               if (i == scribbleLength - 1) {
//                 forward = !forward
//                 setTimeout(scribble, 200)
//               }
//             }, i * typingSpeed)
//           })(i + 1)
//         }
//       }
//     }
//     return{
//       scribble
//     }
//   }


//==================================================================================

(function(){
  
  var _heroSection = document.querySelector('.hero')
  var _messageSection = document.querySelector('.head-msg-container')
  var _postsSection = document.querySelector('.featured-posts')
  var _linksSection = document.querySelector('.featured-links')
  var _footerSection = document.querySelector('footer')
  var _feedbackMsgInput = document.querySelector('.feedback-msg')
  var _feedbackEmailInput = document.querySelector('.feedback-email')
  
  
  var heroSectionHeight = getComputedStyle(_heroSection).height.split('px')[0]
  var messageSectionHeight = getComputedStyle(_messageSection).height.split('px')[0]
  var postsSectionHeight = getComputedStyle(_postsSection).height.split('px')[0]
  var linksSectionHeight = getComputedStyle(_linksSection).height.split('px')[0]
  var footerSectionHeight = getComputedStyle(_footerSection).height.split('px')[0]

  var first = parseFloat(heroSectionHeight)
  var second = (first + parseFloat(messageSectionHeight))
  var third = (second + parseFloat(postsSectionHeight))
  var forth = (third + parseFloat(linksSectionHeight))
  var fivth = (forth + parseFloat(footerSectionHeight))
  
  function getWindowWidth(){
    var width = 0
    if (document.body && document.body.offsetWidth) {
      width = document.body.offsetWidth;
    }
    if (document.compatMode=='CSS1Compat' &&
        document.documentElement &&
        document.documentElement.offsetWidth ) {
       width = document.documentElement.offsetWidth;
    }
    if (window.innerWidth) {
       width = window.innerWidth;
    }
    return width;
  }
  
  function revealEmail(){
    _feedbackEmailInput.classList.add('show-email')
  }
  
  function updateWindowSize() {
    var width = getWindowWidth()
  
    if(width < 768){
      document.querySelector('footer').classList.remove('fixed-footer')
      document.querySelector('footer').zIndex = 0;
      document.querySelector('.featured-links').style.marginBottom = '0px'
    }else{
      document.querySelector('footer').classList.add('fixed-footer')
      _linksSection.style.marginBottom = footerSectionHeight + 'px'
    }
}
  
  function onScroll() {
    var width = getWindowWidth()
    if(width>=768){
      scrollBarPosition = window.pageYOffset | document.body.scrollTop
      if (scrollBarPosition > first) {
        _footerSection.style.zIndex = -150;
      }else{
        _footerSection.style.zIndex = -300;
      }
    }else{
      _footerSection.style.zIndex = 0;
    }
  }
  
  function attachListener(){
    //Remove if width is less than 768px
    window.addEventListener('scroll', onScroll, false)
    window.onresize = function(event) {updateWindowSize()}
    
    _feedbackMsgInput.addEventListener('textInput',revealEmail,false)
    _feedbackMsgInput.addEventListener('change',revealEmail,false)
    _feedbackMsgInput.addEventListener('input',revealEmail,false)
  }
  
  
  
  function init(){
    updateWindowSize()
  }
  
  
  
  
  
  /* Executing actual logic*/
  attachListener()
  init()
})()










function sendSuggestion(e){
  var x = document.forms["feedback"]["message"].value;
    if (x == "") {
        alert("Name must be filled out");
    }else{
        alert('Message has been sent!');
      document.forms["feedback"]["message"].value = ''
      document.forms["feedback"]["email"].value = ''
      document.querySelector('.feedback-email').classList.remove('show-email')
    }
  
  return false;
}


var string = "Curiosity is our drive.";
var str = string.split("");
var el = document.querySelector('.banner-text-first');
(function animate() {
str.length > 0 ? el.innerHTML += str.shift() : clearTimeout(running); 
var running = setTimeout(animate, 90);
  if(str.length == 1){
    setTimeout(function(){
    var string = "Excellence is our legacy.";
  var str = string.split("");
  var el = document.querySelector('.banner-text-second');
  (function animate() {
  str.length > 0 ? el.innerHTML += str.shift() : clearTimeout(running); 
  var running = setTimeout(animate, 90);
  })();
},500)

  }
})();

