export function error(element, divErr, objectData){
    if(element.value === ""){
        divErr.innerHTML = objectData;
    }else{
        divErr.innerHTML = "";
    }
}

export  async function registerCustomer(firstname,middlename,lastname,civilStatus,sitioPurok,barangay,contact,connection_type,connection_status){

     let bodyData = {
        "firstname" : firstname.value,
        "middlename" : middlename.value,
        "lastname" : lastname.value,
        "civil_status" : civilStatus.value,
        "purok" : sitioPurok.value,
        "brgy" : barangay.value,
        "contact_number" : contact.value,
        "connection_type" : connection_type.value,
        "connection_status" : connection_status.value
    }

    const setup = {
        method: 'POST',
        headers: {
            Accept : 'application/json',
            'Content-Type' : 'application/json'
        },
        body : JSON.stringify(bodyData)
    }

    try{
        let response = await fetch(`http://${window.location.hostname}/api/register`, setup);
        let data = await response.json();

        return data;
    }catch(e)
    {
        return e
    }

}
