(function(){
    const holder = document.getElementById('dashboard-slideholder');
    const dashboardOptions = document.querySelectorAll('.dashboard-options a');
    const serviceForm = document.getElementById('service-form').querySelector('form');

    dashboardOptions.forEach( (btn) => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const translation = parseInt(btn.getAttribute('data-translation'));
            holder.style.left= `${(-100)*translation}%`;
            if(translation == 2){
                serviceForm.action = 'index.php?route=company.save';
                serviceForm.reset();
                const logoHolder = serviceForm.querySelector("input[type='file']").nextElementSibling;
                logoHolder.innerHTML = '';
            }
        });
    });

    const fillForm = jsonData => {
        const arrInputs = serviceForm.querySelectorAll('input');
        const arrCategories = jsonData.nCategoriesID.split(',');
        const description = serviceForm.querySelector('textarea');

        serviceForm.action = 'index.php?route=company.update';
        arrInputs.forEach( (field) => {
            switch (field.name){
                case 'strName':
                    field.value = jsonData.strName;
                    break;
                case 'strAddress':
                    field.value = jsonData.strAddress;
                    break;
                case 'strEmail':
                    field.value = jsonData.strEmail;
                    break;
                case 'nPhone':
                    field.value = jsonData.nPhone;
                    break;
                case 'nPrice':
                    field.value = jsonData.nPrice;
                    break;
                case 'categories[]':
                    arrCategories.forEach( (cat) => { 
                        if(field.value == cat){
                            field.checked = true;
                        }
                    });
                    break;
                case 'strLogoFile':
                    const imgPreview = `<img src='assets/${jsonData.strLogoFile}'/>`;
                    field.nextElementSibling.innerHTML = imgPreview;
                    break;
                default:
                    break;
            };
            holder.style.left= '-200%';
        });
        description.value = jsonData.strDescription;
    }; 
    const getServiceInfo = serviceID => {
        const options = {
            url: 'index.php?route=company.editcompany',
            method: 'POST',
            data: {
                svcid : serviceID
            },
            success: (result) => {
                fillForm(JSON.parse(result));
            },
            error: (err) => {
                console.log(`AJAX error: ${err}`);
            }
        };
        $.ajax(options);
    };
    const deleteService = serviceID => {
        const options = {
            url: 'index.php?route=company.delete',
            method: 'POST',
            data: {
                svcid : serviceID
            },
            success: () => {
                console.log('Company deleted!');
            },
            error: (err) => {
                console.log(`AJAX error: ${err}`);
            }
        };
        $.ajax(options);
    };
    const listItems = document.getElementsByClassName('user-services');
    for(var i = 0; i < listItems.length; i++){
        listItems[i].addEventListener('click', (e) => {
            e.preventDefault();
            var element = e.currentTarget;
            var serviceId = element.getAttribute('data-companyid');
            if(element.classList.contains('delete')){                
                if(confirm('Are you sure that you want to dele this company permanently?')){
                    document.querySelectorAll('.usercompanies-list ul li').forEach( (el) => {
                        if(el.querySelector('.delete').getAttribute('data-companyid') == serviceId){
                            el.remove();
                        }
                    });
                }
                deleteService(serviceId);
                return;
            }          
            getServiceInfo(serviceId);
        });
    }
})();