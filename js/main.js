document.addEventListener("DOMContentLoaded", function() {
    ascc_app.init();
});

const ascc_app = {
    init: function(){
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
    },
    qtyUpdate: function(el, type) {
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
};

// function qtyUpdate(el, type) {
//     const qtyBox = el.closest('.qty');
//     const numEl = qtyBox.querySelector('.num');
//     let value = parseInt(numEl.innerText);

//     if (type === 'increment') {
//         value++;
//     } else if (type === 'decrement' && value > 1) {
//         value--;
//     }

//     numEl.innerText = value;
// }