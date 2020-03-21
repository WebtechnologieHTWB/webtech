document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('#button')
        .addEventListener('click', function () {
            clearMessage();
            controlName();
            controlStreet();
            controlHN();
            controlPC();
            controlLocation();
            controlIBAN();
            controlBIC();
            controlMoneyAmount();
            });
});
// check the complete name
    function controlName(){
        let jsName = document.getElementById('names').value;
        let jsNameSplit = document.querySelector("#names").value.split(' ', 3); //document.ExcSix.Names.querySelector("#namen").valueOf().split(' ', 3);
        let lengthOfName = jsNameSplit.length;
        if(jsName.length == 0){
            writeMessage("The field \'Name\' is not filled in correctly.")
        }

        if(!jsNameSplit[0].toString().match(/^[a-z-]*$/i)) {
            writeMessage("We have found an illegal symbols by your firstname.")
        }
        if(lengthOfName==3){
            if(!jsNameSplit[1].toString().match(/^[a-z-]*$/i)) {
                writeMessage("We have found an illegal symbols by your second firstname.")
            }
        }
        if(!jsNameSplit[lengthOfName-1].toString().match(/^[a-z-']*$/i)){
            writeMessage("We have found an illegal symbols by your lastname");
        }

    }
// check the street
    function controlStreet(){
        let jsStreet = document.getElementById('street').value;
        if(jsStreet.length == 0){
            writeMessage("The field \'Street\' is not filled in correctly.");
        }
        if(!(jsStreet.match(/^[a-z\s]*$/i))){
            writeMessage("The field \'Street\' is not filled in correctly. You have used an illegal symbol.");
        }
    }
// check the house number
    function controlHN(){
        let jsHouseNumber = document.getElementById('houseNumber').value;
        if(jsHouseNumber.length == 0){
            writeMessage("The field \'House Number\' is not filled in correctly.");
        }
        if(!(jsHouseNumber.match(/^[a-z0-9]*$/i))){
            writeMessage("The field \'House Number\' is not filled in correctly. You have used an illegal symbol.");
        }
    }
// check the postcode
    function controlPC() {
        var jsPostcode = document.getElementById('postcode').value;
        if ((jsPostcode.length < 4) || (jsPostcode.length > 8) || (jsPostcode.length == 0) || (jsPostcode == null) || !(jsPostcode.match(/^[a-z0-9]*$/i))) {
            writeMessage("The field \'Postcode\' is not filled in correctly.");
        };
    }
// check the location
    function controlLocation(){
        let jsLocation = document.getElementById('location').value;
        if(jsLocation.length == 0) {
            writeMessage("The field \'Location\' is not filled in correctly.");
        }
        if(!(jsLocation.match(/^[a-z\s]*$/i))){
            writeMessage("The field \'Localtion\' is not filled in correctly. You have used an illegal symbol.");
        }
    }
// check the IBAN
    function controlIBAN(){
        var jsIBAN = document.getElementById('iban').value;
        var jsSpaceIBAN = jsIBAN.replace(/ /g, ""); //speichert IBAN vom Formular in die Variabel jsIBAN und löscht alle Leerzeichen.
        var jsArraySpaceIBAN = document.querySelector("#iban").value.split(' ');
        if(jsIBAN.length == 0){
            writeMessage("The field \'IBAN\' is not filled in correctly. The amount of symbol must be 24. You have " + jsIBAN.length + " symbols.");
        }

        if(!jsSpaceIBAN.match(/^[A-Z]{2}[0-9]{20}$/i)){
            writeMessage("The field \'IBAN\' is not filled in correctly. The first and second symbol have to be a contry-letter. From the third character all symbols have to be a number. You have " + jsIBAN.length + " symbols.");
        }

        if(jsIBAN.length != 0 && jsSpaceIBAN.length != 22){
            writeMessage("The field \'IBAN\' is not filled in correctly. The IBAN is incomplete. You have " + jsIBAN.length + " symbols.");
        }

        if(jsArraySpaceIBAN.length != 6){
            writeMessage("The field \'IBAN\' is not filled in correctly. You have not six blocks.")
        }
    }
// check the BIC
    function controlBIC(){
        var jsBIC = document.getElementById('bic').value;
        if(jsBIC.length == 0){
            writeMessage("The field \'BIC\' is not filled in correctly.");
        }
        if(jsBIC.length != 0 && jsBIC.length != 11){
            writeMessage("The field \'BIC\' is not filled in correctly. A BIC consist of eleven symbols.");
        }
        if(!jsBIC.match(/^[A-Z]{7}[A-Z0-9]{1}[0-9x]{3}$/i)){
            writeMessage("The field \'BIC\' is not filled in correctly. You have used an illegal format.");
        }
    }
// check the amount of money
    function controlMoneyAmount(){
        var jsMoneyAmount = document.getElementById('amount').value;
        if(jsMoneyAmount.length == 0){
            writeMessage("The field \'Amount of Money\' is not filled in correctly.");
        }
        if(!jsMoneyAmount.match(/^[0-9]+([.,]?[0-9]{2})?$/)){
            writeMessage("The field \'Amount of Money\' is not filled in correctly. The format is illegal: x,xx");
        }
    }
// write the message into the formular as error
    function writeMessage(message) {
        var jsErrorMessage = [];
        jsErrorMessage += message + '\n';
        document.getElementById('divError').style.visibility = 'visible';
        document.getElementById('divError').innerText += jsErrorMessage;
    }
    function clearMessage() {
        document.getElementById('divError').innerText = '';
        document.getElementById('divError').style.visibility = 'hidden';
    }