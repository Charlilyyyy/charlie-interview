import requests from './requests'

export const getMainDatas = () => requests.requests({
    url:'/data',
    method: 'get'
})