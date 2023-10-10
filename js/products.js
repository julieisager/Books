export default class Products {
    constructor() {

        this.data = {
            password: "kickPHP"

        }

        this.rootElem = document.querySelector('.products');
        this.filter = this.rootElem.querySelector('.filter')
        this.items = this.rootElem.querySelector('.items')

        this.nameSearch = this.filter.querySelector('.nameSearch');
    }

    async init(){

        this.nameSearch.addEventListener('input', () => {
            if(this.nameSearch.value.length >= 3) {
                this.render();
            }
        });

        await this.render();
    }

    async render(){
        const data = await this.getData();

        const row = document.createElement('div');
        row.classList.add('row', 'g-4', 'mb-3');

        for(const item of data){
            const col = document.createElement('div');
            col.classList.add('col-md-6', 'col-lg-4', 'col-xl-4');

            col.innerHTML = `
                <div class="card">
                    <img src="uploads/${item.prodImage}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title title">${item.prodTitle}
                        <p class="fs-6 fw-bold mt-2">${item.prodAuthor}</p>
                        </h5>
                        <p class="card-text mt-2">${item.prodDescription}</p>
                        <a href="detalje.php?prodId=${item.prodId}" class="knap btn btn-primary text-white w-100">Læse mere om bogen</a>
                        <div class="d-none">${item.prodLanguage}</div>
                    </div>
                </div>
          
            `;
            row.appendChild(col);
        }

        this.items.innerHTML = '';
        this.items.appendChild(row)

    }

    async getData(){

        this.data.nameSearch = this.nameSearch.value;

        const response = await fetch('api.php', {
            method: "POST",
            body: JSON.stringify(this.data)
        });
        return await response.json();

    }

}