import './bootstrap';

import '../sass/app.scss'

import jQuery from 'jquery';

window.$ = jQuery;
$(document).ready(function () {
    const noteModal = document.getElementById('noteModal')
    noteModal.addEventListener('show.bs.modal', event => {
        const button = event.relatedTarget;
        const property = button.getAttribute('data-bs-property');
        const modalTitle = noteModal.querySelector('.modal-title');
        const modalBodyInput = noteModal.querySelector('#property');
        const properties = {'name': 'Название компании', 'inn': 'ИНН', 'address': 'Адрес', 'phone': 'Телефон', 'ceo': 'Глава компани', 'info': 'Информация', 'company': 'Компания'};
        modalTitle.textContent = `Вы комментируете:  ${properties[property]}`;
        modalBodyInput.value = property;
    })
});
