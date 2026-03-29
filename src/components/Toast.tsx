import { Toaster, toast } from 'sonner';

export function ToastProvider() {
    return <Toaster position="bottom-right" theme="dark" />;
}

export { toast };