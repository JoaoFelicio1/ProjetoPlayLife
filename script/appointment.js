async function bookAnAppointment(obj,token,name){

    try {
        let res=await fetch(`${baseUrl}/booking/create`,{
         method:'POST',
         headers:{
             'Content-type':'application/json',
             Authorization:`${token}`
         },
         body:JSON.stringify(obj)
        })
        let out=await res.json();
        //console.log(out);
        if(out.msg=="This Slot is Not Available."){
         alert("This Slot is Not Available.")
        }else if(out.msg=="new booking created successfully"){
         alert(`Hii ${name} Your booking is confirmed on ${obj.bookingDate}`)
        }else{
         alert("Something went wrong!!")
        }
     } catch (error) {
         console.log("err",error)
         alert("Something went wrong!!!!")
     }
}