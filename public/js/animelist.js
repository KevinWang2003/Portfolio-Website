
async function init() {
    // try {
    //     let response = await fetch("https://kitsu.io/api/edge/users?filter[name]=xTheNightShade");
    //     let data = await response.json();
    //     console.log(data)
    //     return data
    // } catch (err) {
    //     console.error("Error: ", err);
    // }

    const count = await getCount();
    const amount = Math.ceil(count / 10);
    console.log(amount);


    const previous = document.getElementById('prevPage');
    const next = document.getElementById('nextPage');

    let indicator = 0;

    let list = await getAnimeData(`https://kitsu.io/api/edge/users/1288764/library-entries?page[limit]=10&page[offset]=0&sort=-rating`);
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
    const progress = document.getElementById('progress');
    progress.innerHTML = `<p class="text-center" style="color: black">${indicator + 1} / ${amount}</p>`
    list.forEach(function(anime) {
        const ul = document.createElement("div");
        ul.innerHTML =
            `<div class="container">
                <div class="align-items-center">
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img style="width: 300px" src="${anime.relatedAnime.attributes.posterImage.original}" class="card-img" alt="Anime Afbeelding">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">${anime.relatedAnime.attributes.canonicalTitle}</h5>
                                    <a style="color: black; line-height: 20px" class="card-text" href="https://kitsu.io/anime/${anime.relatedAnime.id}" target="_blank">https://kitsu.io/anime/${anime.relatedAnime.id}</a>
                                    <p style="color: black; margin-top: 30px" class="card-text">My Rating: ${anime.rating.rating} / 5.0</p>
                                    <p style="color: black" class="card-text">Status: ${anime.relatedAnime.attributes.status}</p>
                                    <p style="color: black; margin-top: -10px; line-height: 20px" class="card-text">${anime.relatedAnime.attributes.description}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>`;
        domElement.append(ul);
    })
}

async function refreshPage(indicator, amount) {
    let multiplier = indicator * 10;
    let list = await getAnimeData(`https://kitsu.io/api/edge/users/1288764/library-entries?page[limit]=10&sort=-rating&page[offset]=${multiplier}`);
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


async function getAnimeData(page) {
    try {
        let animeRating = [];
        let response = await fetch(page);
        let list = await response.json();
        let animes = list.data;

        for (const anime of animes) {
            let rating = anime.attributes;
            let relatedAnime = await fetchAnimeData(anime.relationships.anime.links.related);

            if (rating && relatedAnime != null){
                let grade = {
                    rating,
                    relatedAnime
                };
                animeRating.push(grade);
            }
        }

        return animeRating;
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

