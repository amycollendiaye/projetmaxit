 export  async  function  fetchCLient(nin)
  {
        const r = await  fetch(`https://application-daf.onrender.com/api/v1/citoyens/${nin}`)

          if(r.ok===true)
          {
              const data=await r.json()

             if (data) {
            alert("NIN trouvé !");
            console.log(r);
        } else {
            alert("NIN non trouvé !");
        }
    } else {
        alert("Impossible de contacter le serveur");
    }
          }

        
  
  export function sendResquest()
  {

    
 const input= document.getElementById('nin')
    console.log(input)
      input.addEventListener('input',(e)=>{
        e .preventDefault()
         const value =  input.value.trim()
        console.log(value);
          if(value.length===13)
          {
             (fetchCLient(value))
          }
        




































        

      })
  }