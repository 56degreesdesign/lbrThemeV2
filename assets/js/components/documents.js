const documents = async function () {
    const body = document.querySelector('.page-template-tpl-documents');
    
    if ( body ) {
        const links = document.querySelectorAll('.txt-link-orange--block'),
                popup = document.getElementById('modal-id'),
                close = document.querySelector('.modal-close');

        function setCookie(name,value,days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days*24*60*60*1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "")  + expires + "; path=/";
        }
        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for(var i=0;i < ca.length;i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1,c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
            }
            return null;
        }
        function eraseCookie(name) {
            document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
        }
        
        links.forEach((link) => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                popup.classList.remove('hidden');
                popup.classList.add('flex');
            })
        });

        close.addEventListener('click', (e) => {
            e.preventDefault();
            popup.classList.remove('flex');
            popup.classList.add('hidden');
        })

        /**
         * Login form
         */
        const submitLogin = document.getElementById("submit-login");
        let attempt = 3; // Variable to count number of attempts.

        // Below function Executes on click of login button.
        function validate(){
            const username = document.getElementById("username").value;
            const password = document.getElementById("password").value;
            
            if ( username === testLogin.login && password === testLogin.password){
                // Refresh the page by replacing the URL with itself
                location.replace(location.href);
                setCookie('documents','show',30);
                return false;
            }
            else {
                attempt --;// Decrementing by one.
                const loginFormError = document.querySelector('.login-form-error');
                loginFormError.textContent = "Wrong credentials. You have "+attempt+" attempts left."
                console.log(testLogin.login)

                // Disabling fields after 3 attempts.
                if( attempt === 0){
                    document.getElementById("username").disabled = true;
                    document.getElementById("password").disabled = true;
                    document.getElementById("submit-login").disabled = true;
                    loginFormError.textContent = 'Too many attempts. Form disabled';
                    submitLogin.classList.add('cursor-not-allowed');

                    return false;
                }
            }
        }

        submitLogin.addEventListener('click', (e) => {
            e.preventDefault();
            validate(); 
        });
    }
};
export const init = documents;