let nbrExp = 1;
let nbrDiplome = 1;

function incrementDiplome()
{
    nbrDiplome++; 
}
function decrementDiplome()
{
    if(nbrDiplome > 1)
    {
        nbrDiplome--;
    }
}

function incrementExp()
{
    nbrExp++;
}
function decrementExp()
{
    if(nbrExp > 1)
    {
        nbrExp--;
    }
}
function multipleExperience()
{
    var wrapper = document.getElementById("HTMLWrapper");
    var temp = "";
    for(var i = 1 ; i <= nbrExp; i++)
    {
        temp +=`<div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Début</span>
            <input pattern="^[0-9]*$" name="debut` + i +`" class="form-control" placeholder="Année de début" aria-label="Debut" aria-describedby="basic-addon1" minlength="4" maxlength="4" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Fin</span>
            <input pattern="^[0-9]*$" name="fin` + i +`" class="form-control" placeholder="Année de fin" aria-label="Fin" aria-describedby="basic-addon1" minlength="4" maxlength="4" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Entreprise</span>
            <input type="text" name="entreprise` + i +`" class="form-control" placeholder="Entreprise" aria-label="Entreprise" aria-describedby="basic-addon1"  required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Poste</span>
            <input type="text" name="poste` + i +`" class="form-control" placeholder="Poste occupé" aria-label="Poste" aria-describedby="basic-addon1"  required>
        </div>
    </div><br/><br/>`;
    }
    temp += `<input hidden name="nbrExp" value="` + nbrExp + `"/>`;
    wrapper.innerHTML = temp;
}

function multipleDiplome()
{
    var wrapper = document.getElementById("HTMLWrapperDiplome");
    var temp = "";
    for(var i = 1 ; i <= nbrDiplome; i++)
    {
        temp +=`<div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Libellé</span>
            <input type="text" name="libelle` + i +`" class="form-control" placeholder="Libellé" aria-label="Libellé" aria-describedby="basic-addon1"  required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Année</span>
            <input name="annee` + i +`" pattern="^[0-9]*$" class="form-control" placeholder="Année d'obtention" aria-label="Annee" aria-describedby="basic-addon1" minlength="4" maxlength="4" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Institution</span>
            <input type="text" name="instit` + i +`" class="form-control" placeholder="Institution" aria-label="Institution" aria-describedby="basic-addon1"  required>
        </div>
        </div><br/><br/>`;
    }
    temp += `<input hidden name="nbrDiplome" value="` + nbrDiplome + `"/>`;
    wrapper.innerHTML = temp;
}


function SettextMail()
{
    document.getElementById("mail").value = document.getElementById("pre").value.toLowerCase() + "." + document.getElementById("nom").value.toLowerCase();
}