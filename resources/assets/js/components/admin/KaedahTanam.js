

const kaedah_tanam = new Vue({
    el: "#kaedah_tanam",

    data: {
        kaedahs: [],
        
        newKaedah: {
            id: '',
            name: '',
            code: ''
        },

        edit: false,
    },

    ready: function() {
        this.fetchData();

    },

    computed: {
        validation: function() {
            return {
                name: !!this.newKaedah.name.trim(),
                code: !!this.newKaedah.code.trim()
            }
        },

        isValid: function() {
            var validation = this.validation;
            return Object.keys(validation).every(function(key) {
                return validation[key];
            });
        }
    },

    methods: {

        fetchData: function() {
            $.getJSON('/admin/kaedah_tanam/API/kaedah', function(data) {
                this.$set('kaedahs', data);
            }.bind(this));            
        },

        addData: function() {

            var kaedah = this.newKaedah;

            this.newKaedah = {id:'', name:'', code:''};

            this.$http.post('/admin/kaedah_tanam/API/kaedah', kaedah);

            alert('Berjaya. Kaedah Tanaman telah didaftarkan!');

            this.fetchData();
        },

        deleteData: function(id) {
            this.$http.delete('/admin/kaedah_tanam/API/kaedah/' + id);
            alert('Berjaya. Kaedah Tanaman telah dihapuskan!');
            this.fetchData();
        },

        updateData: function(kaedah) {
            this.edit = true;

            var newKaedah = this.newKaedah;

            $.getJSON('/admin/kaedah_tanam/API/kaedah/' + kaedah.id, function(data) {
                newKaedah.id   = data.id;
                newKaedah.name = data.name;
                newKaedah.code = data.code;
            });

            // console.log(this.edit);
        },

        editData: function(id) {

            var new_kaedah = this.newKaedah; 

            this.newKaedah = {id:'', name: '', code:''};           

            this.$http.put('/admin/kaedah_tanam/API/kaedah/' + id, new_kaedah, function(data) {
                console.log(data);
            });          

            this.edit = false;

            alert('Berjaya. Kaedah Tanam telah dikemaskini!');

            this.fetchData();
        },

        batal: function() {
            this.edit = false;
            this.newKaedah = {id:'', name:'', code:''}
        }


    }



});