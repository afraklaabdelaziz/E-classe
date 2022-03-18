const formAddCourse = document.getElementById('addCourse');
const addTitle = document.getElementById('title');
const addType = document.getElementById('type');
const addPrice = document.getElementById('price');
const addDuration = document.getElementById('duration');
let validC = true;
let regexWord = /[A-Za-z ]{4,20}$/;
let regexNumber = /([0-9]+(.)+[0-9]+){2,20}$/
formAddCourse.addEventListener('submit', (elem) => {
    validInputCourse();
    if (validC === false) {
        elem.preventDefault();
    }
});
// function success de validation 
function success(elem) {
    const input = elem.parentElement;
    const error = input.querySelector('.error');
    error.textContent = '';
    input.classList.add('success');
    input.classList.remove('error');
    validC = true;
}
// function error de validation 
function error(elem, msg) {
    const input = elem.parentElement;
    const error = input.querySelector('.error');
    error.textContent = msg;
    input.classList.add('error');
    input.classList.remove('success');
    validC = false;
}
function validInputCourse() {
    if (addTitle.value == '') {
        error(addTitle, 'please enter title of course');
    } else if (regexWord.test(addTitle.value) == false) {
        error(addTitle, 'format is not valid');
    } else {
        success(addTitle);
    }
    if (addType.value == '') {
        error(addType, 'please enter type course');
    } else if (regexWord.test(addType.value) == false) {
        error(addType, 'format is not valid')
    } else {
        success(addType);
    }
    if (addPrice.value == '') {
        error(addPrice, 'please enter price of course');
    } else if (regexNumber.test(addPrice.value) == false) {
        error(addPrice, 'format is not valid');
    } else {
        success(addPrice);
    }
    if (addDuration.value == '') {
        error(addDuration, 'please enter duration of course');
    } else {
        success(addDuration);
    }
}