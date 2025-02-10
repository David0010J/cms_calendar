$(document).ready(function() {
    $('#btn-print').click(function() {
        let wspFrame = document.getElementById('frame').contentWindow;
        // wspFrame.focus();
        wspFrame.print();
        console.log('123');
    });
});


const updateBtn = document.getElementById('#updateBtn')
if (updateBtn) {
  updateBtn.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget
    // Extract info from data-bs-* attributes
    const recipient = button.getAttribute('data-bs-whatever')
    // If necessary, you could initiate an Ajax request here
    // and then do the updating in a callback.

    // Update the modal's content.
    const modalTitle = updateBtn.querySelector('.modal-title')
    const modalBodyInput = updateBtn.querySelector('.modal-body input')

    modalTitle.textContent = `New message to ${recipient}`
    modalBodyInput.value = recipient
  })
}
