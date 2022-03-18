const formAddStud = document.getElementById('addStud');
const nameStudent = document.getElementById('name');
const emailStudent = document.getElementById('email');
const phoneStudent = document.getElementById('phone');
const numberStudent = document.getElementById('number');
const dateStudent = document.getElementById('date');
validS = true;
let regexWord = /[A-Za-z ]{4,20}$/;
let regexEmail = /^(^[a-z0-9-_.][a-z0-9]+@(gmail|outlook).(com|fr|ma))$/;
let regexNumber = /[0-9]{2,20}/
// validation form add Students
formAddStud.addEventListener('submit', (event) => {
    validInputStudents();
    if (validS === false) {
        event.preventDefault();
    }
});
// function success de validation 
function success(elem) {
    const input = elem.parentElement;
    const error = input.querySelector('.error');
    error.textContent = '';
    input.classList.add('success');
    input.classList.remove('error');
    validS = true;
}
// function error de validation 
function error(elem, msg) {
    const input = elem.parentElement;
    const error = input.querySelector('.error');
    error.textContent = msg;
    input.classList.add('error');
    input.classList.remove('success');
    validS = false;
}
function validInputStudents() {
    if (nameStudent.value == '') {
        error(nameStudent, 'please enter name');
    } else if (regexWord.test(nameStudent.value) == false) {
        error(nameStudent, 'format is not valid');
    } else {
        success(nameStudent);
    }
    if (emailStudent.value == '') {
        error(emailStudent, 'please enter email');
    } else if (regexEmail.test(emailStudent.value) == false) {
        error(emailStudent, 'format email is not valid')
    } else {
        success(emailStudent);
    }
    if (phoneStudent.value == '') {
        error(phoneStudent, 'please enter phone');
    } else if (regexWord.test(phoneStudent.value) == false) {
        error(phoneStudent, 'format is not valid');
    } else {
        success(phoneStudent);
    }
    if (numberStudent.value == '') {
        error(numberStudent, 'please enter number');
    } else if (regexNumber.test(numberStudent.value) == false) {
        error(numberStudent, 'format is not valid');
    } else {
        success(numberStudent);
    }
    if (dateStudent.value == '') {
        error(dateStudent, 'please enter date');
    } else {
        success(dateStudent);
    }
}
