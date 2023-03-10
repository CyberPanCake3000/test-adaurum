import './bootstrap';

import '../sass/app.scss'

import 'jquery-validation';
import jQuery from 'jquery';

window.$ = jQuery;
$(document).ready(function () {
    const noteModal = document.getElementById('noteModal')
    if(noteModal){
        noteModal.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget;
            const property = button.getAttribute('data-bs-property');
            const modalTitle = noteModal.querySelector('.modal-title');
            const modalBodyInput = noteModal.querySelector('#property');
            const properties = {'name': 'Название компании', 'inn': 'ИНН', 'address': 'Адрес', 'phone': 'Телефон', 'ceo': 'Глава компани', 'info': 'Информация', 'company': 'Компания'};
            modalTitle.textContent = `Вы комментируете:  ${properties[property]}`;
            modalBodyInput.value = property;
        });
    }

    const createForm = $('#createCompany');

    if(createForm){
        $("input[type='num']").on("keypress", function (event) {
            var key = event.charCode || event.keyCode || 0;
            return (key === 8 || key === 9 || key === 46 || (key >= 48 && key <= 57));
        });

        createForm.validate({
            rules:{
                'name': 'required',
                'address': 'required',
                'phone': {
                    required: true,
                    minlength: 5,
                    number: true,
                },
                'inn': {
                    required: true,
                    rangelength: [10, 10],
                    number: true,
                },
                'ceo': 'required',
            },
        });


    }
});
