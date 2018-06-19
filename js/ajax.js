function connexion(){
    $.post('model/ajax-min.php', 'function=1&username='+document.getElementById("username").value+'&password='+document.getElementById('password').value, response);

    function response(response){
        if(response == 200){
            location.replace('vues/try_connection.php');
        }else if(response == 403){
            location.replace('vues/try_connection.php?code=403');
        }else if(response == 2){
            alert('Champ(s) vide(s)');
        }else{
            location.replace('vues/try_connection.php?code=what');
        }
    }
}