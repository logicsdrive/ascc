document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll('.js-datepicker').forEach(input => {
        const picker = new Datepicker(input, {
            format: 'dd-mm-yyyy',
            autohide: true
        });
        const icon = input.closest('.form-element').querySelector('.js-datepicker');
        icon.addEventListener('click', () => {
            picker.show();
        });
    });
});

function qtyUpdate(el, type) {
    const qtyBox = el.closest('.qty');
    const numEl = qtyBox.querySelector('.num');
    let value = parseInt(numEl.innerText);

    if (type === 'increment') {
        value++;
    } else if (type === 'decrement' && value > 1) {
        value--;
    }

    numEl.innerText = value;
}