import * as asyncfunc from './asyncfunc.js';



document.getElementById('registerClient').addEventListener('click', ()=>{

    var firstname = document.getElementById('first_name');
    var middlename = document.getElementById('middle_name');
    var lastname = document.getElementById('last_name');
    var civilStatus = document.getElementById('civil_status');
    var sitioPurok = document.getElementById('sitio_purok');
    var barangay = document.getElementById('barangay');
    var contact = document.getElementById('contact');
    var connection_type = document.getElementById('connection_type');
    var connection_status = document.getElementById('connection_status');


    asyncfunc.registerCustomer(firstname,middlename,lastname,civilStatus,sitioPurok,barangay,contact,connection_type,connection_status).then(data=> {

        if(data.status === "success"){
            Swal.fire({
                title : "Great!",
                text: data.message,
                icon: "success"
            })
        }
        else{



            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                asyncfunc.error(firstname,document.getElementById('first_name_err'),data.errors.firstname);
                asyncfunc.error(lastname,document.getElementById('last_name_err'),data.errors.lastname);
                asyncfunc.error(civilStatus,document.getElementById('civil_status_err'),data.errors.civil_status);
                asyncfunc.error(sitioPurok,document.getElementById('sitio_purok_err'),data.errors.purok);
                asyncfunc.error(barangay,document.getElementById('brgy_err'),data.errors.brgy);
                asyncfunc.error(contact,document.getElementById('contact_err'),data.errors.contact_number);
                asyncfunc.error(connection_type,document.getElementById('connection_type_err'),data.errors.connection_type);
                asyncfunc.error(connection_status,document.getElementById('connection_status_err'),data.errors.connection_status);
               }
               else{
                for(let x in data.errors){
                    Toastify({
                        text: data.errors[x],
                        duration : 2000 * data.errors.length,
                        gravity: "bottom",
                        position: "right",
                        stopOnFocus: true,
                        backgroundColor: "#dc3545"
                    }).showToast();
                }
            }
        }
    });
});
