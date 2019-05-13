<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lundströms järn</div>

                    <div class="card-body">
                    Här är en spännande produkt med id 34.
                    <p>{{ prodName }}</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                prodName: null
            }
        },
        mounted() {
            console.log('Component mounted.')
            axios
                .get('/api/products/34')
                .then(response => (this.prodName = response.data[0].name))
        }
    }
</script>
