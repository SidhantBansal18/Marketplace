class FormsValidator{

    //Function to make sure that the user does not submit blank or invalid values
    static validateForm(){
        // Retrieve form inputs
        const nameInput = document.getElementById('name');
        const descriptionInput = document.getElementById('description');
        const priceInput = document.getElementById('price');

        // Perform validation checks
        let isValid = true;

        if (nameInput.value.trim() === '') {
        nameInput.classList.add('error');
        isValid = false;
        return false;
        } 
        else {
        nameInput.classList.remove('error');
        }

        if (descriptionInput.value.trim() === '') {
        descriptionInput.classList.add('error');
        isValid = false;
        } 
        else {
        descriptionInput.classList.remove('error');
        }

        if (priceInput.value.trim() === '' || isNaN(priceInput.value)) {
        priceInput.classList.add('error');
        isValid = false;
        } 
        else {
        priceInput.classList.remove('error');
        }

        // Return true to submit the form or false to prevent submission
        return isValid;
    }
}