import { getMainDatas } from "../../api/interview";

export default {
    namespaced: true,
    state(){
        return{
            maindatas:[]
        };
    },
    getters:{
        maindatas(state){
            return state.maindatas;
        },
        isMaindatasExists(state){
            return state.maindatas.length !== 0;
        }
    },
    actions: {
        async getMainDatas({commit}) {
            let response = await getMainDatas();
            commit("SET_MAINDATAS", response);
        }

        // async getMainDatas = ({ commit },payload) => {
        //     let url = `/`;
        
        //     axios.post(url, payload).then( res => {
        //         commit('SET_MAINDATAS', res.data);
        //     });
        // }
    },
    mutations: {
        SET_MAINDATAS(state, responseMaindatas) {
            state.maindatas = responseMaindatas;
        }
    }
}