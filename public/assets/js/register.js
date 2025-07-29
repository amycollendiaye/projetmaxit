const pieceInput = document.getElementById("pieceidentite");

if (pieceInput) {
  pieceInput.addEventListener("input", async function (e) {
    const nin = e.target.value.trim();
    const cniPattern = /^[1-2][0-9]{12}$/;
    const successMsg = e.target.parentElement.querySelector(".success-message");
    const errorMsg = e.target.parentElement.querySelector(".error-message");
    // Vérifie le format du NIN
    if (cniPattern.test(nin)) {
      // console.log(cniPattern.test(nin))
      successMsg.classList.add("hidden");
      errorMsg.classList.add("hidden");

      // Appel API
      try {
        const response = await fetch(`https://application-daf.onrender.com/api/v1/citoyens/${nin}`);
        const result = await response.json();
         console.log(result)
         

        // Si l'API retourne un citoyen
        if (result.data) {
          // Remplir les champs
          document.getElementById("nom").value = result.data.nom || "";
          document.getElementById("prenom").value = result.data.prenom || "";
          document.getElementById("datenaissance").value = result.data.date_naissance || "";
          document.getElementById("adresse").value = result.data.lieu_naissance || "";

          successMsg.textContent = "NIN trouvé, informations récupérées.";
          successMsg.classList.remove("hidden");
          errorMsg.classList.add("hidden");
        } else {
          errorMsg.textContent = "NIN non trouvé dans la base.";
          errorMsg.classList.remove("hidden");
          successMsg.classList.add("hidden");
          // Vider les champs
          document.getElementById("nom").value = "";
          document.getElementById("prenom").value = "";
          document.getElementById("datenaissance").value = "";
          document.getElementById("adresse").value = "";
        }
      } catch (err) {
        errorMsg.textContent = "Erreur de connexion à l'API.";
        errorMsg.classList.remove("hidden");
        successMsg.classList.add("hidden");
      }
    } else {
      errorMsg.textContent = "Format NIN invalide (13 chiffres, commence par 1 ou 2)";
      errorMsg.classList.remove("hidden");
      successMsg.classList.add("hidden");
      // Vider les champs
      document.getElementById("nom").value = "";
      document.getElementById("prenom").value = "";
      document.getElementById("datenaissance").value = "";
      document.getElementById("adresse").value = "";
    }
  });
}