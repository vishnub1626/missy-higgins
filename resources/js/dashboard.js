import Vue from 'vue';
import BaseModal from './components/BaseModal.vue';
import ConfirmationModal from './components/ConfirmationModal.vue';

Vue.component('BaseModal', BaseModal);
Vue.component('ConfirmationModal', ConfirmationModal);

new Vue({
    el: '#dashboard',

    components: {
        'confirmation-modal' : ConfirmationModal
    },

    data: {
        confirmDeletion: false,
        form: null
    },

    methods: {
        askConfirmation(e) {
            this.form = e.target.closest('form');
            this.confirmDeletion = true;
        },

        deleteMessage() {
            this.confirmDeletion = false;

            this.form.submit();
        },
    },
});