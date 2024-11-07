
const classes = {
    farnham: ["Toddlers Football", "Kickers Football", "Strikers Football", "Diddis Tennis"],
    farnborough: ["Toddlers Football", "Kickers Football", "Kickers 2 Football", "Strikers Football", "Diddis Tennis"],
    basingstoke: ["Year 2 and Year 3 Football Academy", "Year 4 and Year 5 Football Academy", "Year 6 and Year 7 Football Academy"]
};

const daysMap = {
    farnham: { day: 6, label: "Saturday" },
    farnborough: { day: 0, label: "Sunday" },
    basingstoke: { day: 1, label: "Monday" }
};

function updateFields() {
    const venueSelect = document.getElementById('venue');
    const venue = venueSelect.value;
    const classField = document.getElementById('class-field');
    const dateField = document.getElementById('date-field');
    const classSelect = document.getElementById('class');
    const dateSelect = document.getElementById('start-date');


    classSelect.innerHTML = '';
    dateSelect.innerHTML = '';
    classField.classList.add('hidden');
    dateField.classList.add('hidden');


    if (venue) {
        venueSelect.options[0].style.display = 'none';

        classField.classList.remove('hidden');
        classes[venue].forEach(item => {
            const option = document.createElement('option');
            option.value = item;
            option.textContent = item;
            classSelect.appendChild(option);
        });


        dateField.classList.remove('hidden');
        populateDates(venue);
    }
}

function populateDates(venue) {
    const dateSelect = document.getElementById('start-date');
    const today = new Date();
    const dayOfWeek = daysMap[venue].day;
    const maxDates = 4;
    let count = 0;


    while (count < maxDates) {
        if (today.getDay() === dayOfWeek) {
            const option = document.createElement('option');
            option.value = today.toISOString().split('T')[0];
            option.textContent = today.toDateString();
            dateSelect.appendChild(option);
            count++;
        }
        today.setDate(today.getDate() + 1);
    }
}


function setMinDate() {
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('dob').setAttribute('min', today);
}


window.onload = setMinDate;

function showConfirmation(event) {
    // Prevent the default form submission
    event.preventDefault();

    // Validate the form
    const form = document.getElementById('stripe-login');
    if (form.checkValidity()) {
        // Show the confirmation alert
        alert("Registration Completed Successfully");

        // Clear the input fields
        form.reset(); // Reset the form fields to blank
    } else {
        // If the form is not valid, show the default validation message
        form.reportValidity();
    }
}

// Set the min date for the child DOB input
window.onload = function () {
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('dob').setAttribute('min', today);
}