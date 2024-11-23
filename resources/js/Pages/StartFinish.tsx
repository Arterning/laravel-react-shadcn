interface PageProps {
    name: string;
    sex: string;
    appearance: Record<string, any>;
}

export default function StartFinish({
    name,
    sex,
    appearance
}: PageProps) {
    return (
        <div>
            <span>很好，已经收到您的外观信息</span>
            <span>
                名称
                {
                    name
                }
                ，
                性别
                {
                    sex
                }
            </span>
        </div>
    )
}