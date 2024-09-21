window.onload = function() {
    document.getElementById("jobApplicationForm").onsubmit = function() {
        // Validate Full Name
        var name = document.getElementById("name").value;
        if (name === "") {
            alert("Please enter your full name.");
            return false;
        }

        // Validate Email Address
        var email = document.getElementById("email").value;
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailPattern.test(email)) {
            alert("Please enter a valid email address.");
            return false;
        }

        // Validate Phone Number
        var phone = document.getElementById("phone").value;
        var phonePattern = /^[0-9]{10,15}$/;
        if (!phonePattern.test(phone)) {
            alert("Please enter a valid phone number.");
            return false;
        }

        // Validate Resume Upload
        var resume = document.getElementById("resume").value;
        if (resume === "") {
            alert("Please upload your resume.");
            return false;
        }

        // Everything is valid
        return true;
    };
};
