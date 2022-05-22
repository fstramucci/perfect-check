require('./bootstrap');

perfectCheck = (number1, number2) => { 
  axios.get( '/api/perfect-check/'+number1+'/'+number2 ).then( response => {  
    document.getElementById('result').innerText = response.data;
  }).catch( error => console.error( error ) );
};