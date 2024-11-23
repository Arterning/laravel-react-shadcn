import InputError from "@/Components/InputError";
import PrimaryButton from "@/Components/PrimaryButton";
import { Input } from "@/components/ui/input";
import { Head, useForm } from "@inertiajs/react";
import { FormEvent } from "react";

export default function StartPage() {

    const { data, setData, post, processing, reset, errors } = useForm({
        sex: '',
        height: '',
        weight: '',
        age: '',
        message: '',
    });
 
    const submit = (e: FormEvent) => {
        e.preventDefault();
        post(route('appearance.store'), { onSuccess: () => reset() });
    };

    return (
        <div className="">
            <Head title="开始使用" />

            <div className="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
                <div>输入您的个人信息让我们为您定制照片</div>
                <form onSubmit={submit} className="flex flex-col gap-3">
                    <Input value={data.sex} placeholder="性别" onChange={
                        e=>setData('sex', e.target.value)
                    }/>
                    <Input value={data.height} placeholder="身高" onChange={
                        e=>setData('height', e.target.value)
                    }/>
                    <Input value={data.weight} placeholder="体重" onChange={
                        e=>setData('weight', e.target.value)
                    }/>
                    <Input value={data.age} placeholder="年龄" onChange={
                        e=>setData('age', e.target.value)
                    }/>
                    <textarea
                        value={data.message}
                        placeholder="其他信息"
                        className="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                        onChange={e => setData('message', e.target.value)}
                    ></textarea>
                    <InputError message={errors.message} className="mt-2" />
                    <PrimaryButton disabled={processing}>提交</PrimaryButton>
                </form>
            </div>
        </div>
    )
}