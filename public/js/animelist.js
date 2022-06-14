
async function init() {
    const count = await getCount();
    const amount = Math.ceil(count / 5);
    console.log(amount);


    const previous = document.getElementById('prevPage');
    const next = document.getElementById('nextPage');

    let indicator = 0;

    let list = await getAnimeData(indicator.toString());
    console.log(list);

    await updatePage(list, indicator, amount);

    previous.addEventListener('click', async function () {
        if (indicator > 0) {
            indicator -= 1;
            await refreshPage(indicator, amount);
        }
    });
    next.addEventListener('click', async function () {
        if (indicator <= amount) {
            indicator += 1;
            await refreshPage(indicator, amount);
        }
    });

}

async function updatePage(list, indicator, amount) {
    const domElement = document.getElementById("anime");
    domElement.innerHTML = "";
    list.forEach(function(anime) {
        const progress = document.getElementById('progress');
        progress.innerHTML = `<p class="text-center" style="color: black">${indicator + 1} / ${amount}</p>`
        const ul = document.createElement("div");
        ul.innerHTML =
            `
                <div class="container">
                <div class="align-items-center">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img style="width: 300px" src="${anime.relatedAnime.attributes.posterImage.original}" class="card-img" alt="Anime Afbeelding">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">${anime.relatedAnime.attributes.canonicalTitle}</h5>
                                    <p style="color: black; margin-top: 30px" class="card-text">My Rating: ${anime.rating.rating} / 5.0</p>
                                    <p style="color: black" class="card-text">Status: ${anime.relatedAnime.attributes.status}</p>
                                    <p style="color: black; margin-top: -10px; line-height: 20px" class="card-text">${anime.relatedAnime.attributes.description}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
`;
        domElement.append(ul);
    })
}

async function refreshPage(indicator, amount) {
    let multiplier = indicator * 5;
    let list = await getAnimeData(multiplier.toString());
    console.log(list)
    await updatePage(list, indicator, amount);
}

async function getCount(){
    try {
        let response = await fetch("https://kitsu.io/api/edge/users/1288764/library-entries?page");
        let data = await response.json();
        let count = data.meta.count;
        return count;
    } catch (err) {
    console.error("Error: ", err);
}
}


async function getAnimeData(multiplier) {
    try {
        let response = await fetch(`https://kitsu.io/api/edge/users/1288764/library-entries?page[limit]=5&page[offset]=${multiplier}&sort=-rating&filter[status]=completed`);
        let list = await response.json();

        let animes = list.data;

        let animeGrade = [];

        for (const anime of animes) {
            let rating = anime.attributes;
            let relatedAnime = await fetchAnimeData(anime.relationships.anime.links.related);

            if (rating && relatedAnime != null){
                let grade = {
                    rating,
                    relatedAnime
                };
                animeGrade.push(grade);
            }
        }

        return animeGrade;
    } catch (err) {
        console.error("Error: ", err);
    }
}

async function fetchAnimeData(relation) {
    try {
        let response = await fetch(relation);
        let list = await response.json();
        let data = list.data
        return data
    } catch (err) {
        console.error("Error: ", err);
    }
}

init()

// Here we define our query as a multi-line string
// Storing it in a separate .graphql/.gql file is also possible
// var query = `
// query ($id: Int) { # Define which variables will be used in the query (id)
//   Media (id: $id, type: ANIME) { # Insert our variables into the query arguments (id) (type: ANIME is hard-coded in the query)
//     id
//     title {
//       romaji
//       english
//       native
//     }
//   }
//   User (name: user) {
//
//   }
// }
// `;
//
// // Define our query variables and values that will be used in the query request
// var variables = {
//     id: 15125,
//     user: xTheNightShade
// };
//
// // Define the config we'll need for our Api request
// var url = 'https://graphql.anilist.co',
//     options = {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json',
//             'Accept': 'application/json',
//         },
//         body: JSON.stringify({
//             query: query,
//             variables: variables
//         })
//     };
//
// // Make the HTTP Api request
// fetch(url, options).then(handleResponse)
//     .then(handleData)
//     .catch(handleError);
//
// function handleResponse(response) {
//     return response.json().then(function (json) {
//         return response.ok ? json : Promise.reject(json);
//     });
// }
//
// function handleData(data) {
//     console.log(data);
// }
//
// function handleError(error) {
//     alert('Error, check console');
//     console.error(error);
// }
