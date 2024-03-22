function validateUsername(value) {
    const regex = /[\s~`!@#$%\^&*+=\[\]\\';,/{}|\\":<>\?]/g;
    if (regex.test(value)) {
        document.getElementById('invalid').style.display = 'block';
    } else {
        document.getElementById('invalid').style.display = 'none';
    }
}