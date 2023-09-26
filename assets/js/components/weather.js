module.exports = function () {
function getWeather() {
    fetch('https://api.openweathermap.org/data/2.5/weather?lat=38.5733&lon=-109.5498&units=imperial&appid=cea83996663e043ef18999eeed3fed83')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            const temperature = data.main.temp.toFixed(0);
            const description = data.weather[0].description.toUpperCase();

            const formattedWeather = `${description} ${temperature}°`;

            const currentWeatherElement = document.querySelector('.currentWeather');
            if (currentWeatherElement) {
                currentWeatherElement.textContent = formattedWeather;
            } else {
                console.error('Element with class "currentWeather" not found');
            }
        })
        .catch(error => {
            console.error('Fetch error:', error);
        });
}
getWeather();
}