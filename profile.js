import {movies, series} from "./data.js"

const historyContainerElement = document.getElementById("history-container")

const historyArray = window.USER_HISTORY;
console.log(historyArray)
if (Array.isArray(historyArray)) {
    const historyCards = historyArray.map((history) => {
        let selectedItem;
        if (history.movie_type === 'movie') {
            selectedItem = movies.find(m => m.id == history.movie_id);
        } else if (history.movie_type === 'series') {
            selectedItem = series.find(s => s.id == history.movie_id);
        }

        return `
                        <div class="col-md-3 mb-4">
                            <div class="card">
                                <img src="${selectedItem.image}" class="card-img-top"
                                    alt="${selectedItem.title}">
                                <div class="card-body">
                                    <h5 class="card-title">${selectedItem.title}</h5>
                                    <a href="Movie.php?id=${history.id}&type=${history.type}" class="btn btn-primary">See Online</a>
                                </div>
                            </div>
                        </div>
            `
    });

    historyCards.reverse();


    historyContainerElement.innerHTML = historyCards.join("\n");
}
