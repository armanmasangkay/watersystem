import {registerCustomer} from './asyncfunc.js';



document.getElementById('registerClient').addEventListener('click', ()=>{

    registerCustomer().then(data=> {
        console.log(data);
        // const parsedData = JSON.parse(data);

        if(data.status === "success"){
            Swal.fire({
                title : "Great!",
                text: data.message,
                icon: "success"
            })
        }
        else{
            Swal.fire({
                title: "Error!"
            })
        }
    });
});
