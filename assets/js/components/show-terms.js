const showTerms = async function () {
    const terms = document.querySelectorAll(".post-terms");
    
    if (terms) {
        terms.forEach(termsGroup => {
            const   termsItem = termsGroup.querySelectorAll('.post-terms__item'),
                    btn = termsGroup.querySelector('.post-terms__btn')
            if ( btn) {
                btn.addEventListener('click', () => {
                    btn.classList.add('opacity-0')
                    
                    setTimeout(() => {
                        btn.classList.add('hidden')
                        
                        termsItem.forEach(term => {
                            term.classList.remove('hidden');
                            setTimeout(() => {
                                term.classList.remove('opacity-0');
                            }, 100)
                        })
                    }, 10)
                })
            }
        });
    }
}

export const init = showTerms;