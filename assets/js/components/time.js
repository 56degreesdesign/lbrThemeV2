module.exports = function () {
    function updateCurrentDateTime() {
        const currentDateTimeElements = document.querySelectorAll('.currentDateTime');
        const utahTime = new Date().toLocaleString('en-US', {
            timeZone: 'America/Denver',
            hour12: true, 
            hour: '2-digit',
            minute: '2-digit'
        });

        currentDateTimeElements.forEach(element => {
            element.textContent = utahTime;
        });
    }

    setInterval(updateCurrentDateTime, 30000);

    updateCurrentDateTime();
}