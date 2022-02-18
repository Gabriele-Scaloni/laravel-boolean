<template> 
    <div id="postcards-component">
        
        <table border="1">
            <tr>
                <th>ID</th>
                <th>SENDER</th>
                <th>ADDRESS</th>
                <th>TEXT</th>
                <th>IMAGE</th>
            </tr>
            <tr v-for="postcard in postcards" :key="postcard.id">
                <th>{{postacard.id}}</th>
                <th>{{postacard.sender}}</th>
                <th>{{postacard.address}}</th>
                <th>{{postacard.text}}</th>
                <th><img v-if="postcard.image" :src="'/storage/postcards/'+ postacard.image" width ="60px" alt=""></th> 
                <!-- dobbiamo linkare l'img  -->

            </tr>
        </table>

    </div>
</template>
<script>
    export default{
        
        data() {
            return {
                postcards:  []
            };
        },
        mounted() {

            axios.get('/api/postcards/list')
            .then(r => this.postcards = r.data)
            .catch(r = console.error(e));
        }
    }

</script>
