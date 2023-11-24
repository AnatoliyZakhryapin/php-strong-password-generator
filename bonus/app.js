 const checkboxUppercaseLetterDOMElement = document.getElementById('has_uppercase_letter');
 const checkboxLowercaseLetterDOMElement = document.getElementById('has_lowercase_letter');
 const checkboxNumberDOMElement = document.getElementById('has_number');
 const checkboxSymbolsDOMElement = document.getElementById('has_symbols');

function check(DOMElemnt) {
    DOMElemnt.checked = true;
};

function uncheck(DOMElemnt) {
    DOMElemnt.checked = false;
};

function onChangeChecked() {
    isCheckUpper = checkboxUppercaseLetterDOMElement.checked;
    isCheckLower = checkboxLowercaseLetterDOMElement.checked;
    isCheckNumber = checkboxNumberDOMElement.checked;
    isCheckSymbols = checkboxSymbolsDOMElement.checked;

    if (!isCheckUpper && !isCheckLower && !isCheckNumber && !isCheckSymbols) {
        check(checkboxUppercaseLetterDOMElement);
        check(checkboxLowercaseLetterDOMElement);
        check(checkboxNumberDOMElement);
        check(checkboxSymbolsDOMElement); 
    }
};

function updateValue(event) {
    document.getElementById("rate_val").innerText = event.value;
};