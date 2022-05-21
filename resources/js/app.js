require('./bootstrap');

perfectCheck = (number) => { 
  axios.get( '/api/perfect-check/'+number ).then( response => {  
    document.getElementById('result').innerText = response.data;
  }).catch( error => console.error( error ) );
};