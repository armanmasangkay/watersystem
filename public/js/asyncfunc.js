export async function registerCustomer(){
    let firstname = document.getElementById('first_name').value;
    let middlename = document.getElementById('middle_name').value;
    let lastname = document.getElementById('last_name').value;
    let civilStatus = document.getElementById('civil_status').value;
    let sitioPurok = document.getElementById('sitio_purok').value;
    let barangay = document.getElementById('barangay').value;
    let contact = document.getElementById('contact').value;
    let connection_type = document.getElementById('connection_type').value;
    let connection_status = document.getElementById('connection_status').value;

    let bodyData = {
        "firstname" : firstname,
        "middlename" : middlename,
        "lastname" : lastname,
        "civil_status" : civilStatus,
        "purok" : sitioPurok,
        "brgy" : barangay,
        "contact_number" : contact,
        "connection_type" : connection_type,
        "connection_status" : connection_status
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
