/* Validation */
/*/////////////////////////////////////////////////////////////////////*/
function validateUserName(username,validateError){
    if(username.length >= 8 && username.length <= 32){
        console.log("success")
    }else if(username === ''){
        validateError.push('Error')
        alert('Username required')
    }
    else{
        validateError.push('Error')
        alert('Username must be contain 8-32 characters')
    }
}

function validateEmail(email,validateError){
    if(email === ''){
        alert('Email required')
        validateError.push('Error')
    }else{
        if((email[0].charCodeAt(0) < 65 || email[0].charCodeAt(0) > 90) && 
       (email[0].charCodeAt(0) < 97 || email[0].charCodeAt(0) > 122)){
        alert('Email can not start special character')
        validateError.push('Error')
        }
        if(!email.endsWith('.co.id') && !email.endsWith('.com')){
            alert('Email must end with .com or .co.id')
            validateError.push('Error')
        }
        if(!email.includes("@yahoo") && !email.includes("@gmail")){
            alert("Email must either use @gmail or @yahoo")
            validateError.push('Error')
        }
    }
    
}

function validatePassword(password,validateError){
    if(password === ''){
        alert("Password Required")
        validateError.push('Error')
    }else if(password.length<8 || password.length>12){
        alert("Password must be contain 8-12 characters")
        validateError.push('Error')
    }
}

function validateConfirmpassowrd(confirmpassword,password,validateError){
    if(confirmpassword === ''){
        alert("Confirm password Required")
        validateError.push('Error')
    }else{
        if(confirmpassword !== password){
            alert("Confirm password is different from password")
            validateError.push('Error')
        }
    }
}

function validateAgreement(agree,validateError){
    if(!agree){
        alert("You must agree to terms and conditions")
        validateError.push('Error')
    }
}


function validate(event){
    event.preventDefault()
    var validateError = []
    var username = document.getElementById('username').value
    var email = document.getElementById('email').value
    var password = document.getElementById('password').value
    var confirmpassword = document.getElementById('confirmpassword').value
    var agree = document.getElementById('check').checked

    validateUserName(username,validateError)
    validateEmail(email,validateError)
    validatePassword(password,validateError)
    validateConfirmpassowrd(confirmpassword,password,validateError)
    validateAgreement(agree,validateError)
    
    console.log(validateError)
    if(validateError.length === 0){
        alert('Registration Successful')
        window.location.href = './main.html'
    }
}
/*/////////////////////////////////////////////////////////////////////*/


/* slider home */
/*/////////////////////////////////////////////////////////////////////*/
var slideCount = 2
var currentSlide = 0

var contents = $('.myslide')
var dot = $('.dot')

const nextSlide = () =>{
    contents[currentSlide].className = "myslide fade"
    dot[currentSlide].className = "dot"

    if(currentSlide === slideCount){
        currentSlide = 0
    }else{
        currentSlide += 1
    }

    contents[currentSlide].className = "myslide fade active"
    dot[currentSlide].className = "dot select"
}

const prevSlide = () =>{
    contents[currentSlide].className = "myslide fade"
    dot[currentSlide].className = "dot"

    if(currentSlide === 0){
        currentSlide = slideCount
    }else{
        currentSlide -= 1
    }
    contents[currentSlide].className = "myslide fade active"
    dot[currentSlide].className = "dot select"
}

const dotSlide = (n) =>{
    contents[currentSlide].className = "myslide"
    dot[currentSlide].className = "dot"
    currentSlide = n

    contents[currentSlide].className = "myslide active"
    dot[currentSlide].className = "dot select"
}
/*/////////////////////////////////////////////////////////////////////*/


/* slider gallery */
/*/////////////////////////////////////////////////////////////////////*/
var contentsGallery = $('.myslide-gallery')

var slideCountGallery = 5
const nextSlideGallery = () =>{
    contentsGallery[currentSlide].className = "myslide-gallery fade"
    dot[currentSlide].className = "dot"
    if(currentSlide === slideCountGallery){
        currentSlide = 0
    }else{
        currentSlide += 1
    }

    contentsGallery[currentSlide].className = "myslide-gallery fade active"
    dot[currentSlide].className = "dot select"
}

const dotSlideGallery = (n) =>{
    contentsGallery[currentSlide].className = "myslide-gallery fade"
    dot[currentSlide].className = "dot"
    currentSlide = n
    contentsGallery[currentSlide].className = "myslide-gallery fade active"
    dot[currentSlide].className = "dot select"
}

setInterval(nextSlideGallery,10000)
/*/////////////////////////////////////////////////////////////////////*/