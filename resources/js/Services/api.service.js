import { useQuery } from '@tanstack/vue-query';
import axios from 'axios';

const API_BASE_URL = '/api/';

export function get(endpoint) {
    const queryKey = ['get', endpoint];

    const queryFn = async () => {
        const response = await axios.get(`${API_BASE_URL + endpoint}`);
        return response.data;
    };
    return useQuery({
        queryKey,
        queryFn,
        staleTime: 300000, // 5 minutes
    });
}

export function post(endpoint, data) {
    const queryKey = ['post', endpoint];

    const queryFn = async () => {
        const response = await axios.post(`${API_BASE_URL + endpoint}`, data);
        return response.data;
    };
    return useQuery({
        queryKey,
        queryFn,
    });
}