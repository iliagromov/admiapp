const baseUrl = 'https://gromov-studio.ru/api/';
async function makeRequest(url, options = {}) {
    try {
        const answer = await fetch(url, options);
    
        if (!answer.ok) {
          throw new Error(answer.status.toString())
        }

        const responseJson = await answer.json();
        console.log(responseJson);
        return responseJson;
    } catch (e) {
        console.warn('Не удалось получить api', e)
        return e;
    }
}
//Запрос на инициализацию сессии
function getId(id){
    let response = makeRequest(baseUrl);
    response.then(res=>{
        window.ecomInitConfig = res.data;
        // console.log(data);
    });
    return response;
    // console.log(response);
    // 
}
//Проверка статуса заказа

function getStatus(){
    let json = {
        "merchantId": "NADEZHDA03013935",
        "orderId": window.ecomInitConfig.orderId,
        "sessionId": window.ecomInitConfig.sessionId
    }
    let response = makeRequest(baseUrl, {
                method: 'POST',
                body: json
            });
    console.log(response);
    return response;
}
//Подтверждение покупки

// async function getId(id) {
//     // let response = await serverApi.get(id);
//     // return parseResponse(response);
//     let data = await makeRequest(baseUrl);
//     return data;
// }

// async function getStatus(json) {
//     let data = await makeRequest(`/js-hw-api/articles.php`,{
//         method: 'POST',
//         body: json
//     });
//     return data;
// }



// async function makeRequest(url, data, baseUrl = 'https://gromov-studio.ru/api/') {
//     try {
//         const url = baseUrl;
//         const answer = await fetch(url, );
    
//         if (!answer.ok) {
//           throw new Error(answer.status.toString())
//         }

//         const responseJson = await answer.json()
//         console.log(responseJson);
//         window.ecomInitConfig.sessionId = responseJson.data.sessionId;
//         return responseJson
//     } catch (e) {
//         console.warn('Не удалось получить api', e)
//         return e;
//     }

//     return fetch(url, {
//         method: 'POST',
//         mode: 'no-cors',
//         cache: 'no-cache',
//         headers: {
//             'Content-Type': 'application/json',
//         },
//         redirect: 'follow',
//         referrerPolicy: 'no-referrer',
//         body: JSON.stringify(data),
//     }).then((response) => {
//         if (response.status !== 200) {
//             return response.text().then(function (text) {
//                 throw new Error(text);
//             });
//         }
//         return response.json();
//     })
// }
