var products = {
    product1: {
        name:'product 1',
        price:'399000',
        quantity:'1',
    },
    product2: {
        name:'product 2',
        price:'199000',
        quantity:'1',
    }
};
localStorage.setItem('products', JSON.stringify(products));